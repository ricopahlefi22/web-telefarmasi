<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Artikel';

        if ($request->ajax()) {
            return DataTables::of(Article::all())
                ->addIndexColumn()
                ->addColumn('action', function (Article $article) {
                    $btn = '<a href="articles/detail/' . $article->id . '"  class="dropdown-item info"><i class="fa fa-eye"></i> Lihat</a> ';
                    $btn .= '<a href="articles/edit/' . $article->id . '"  class="dropdown-item edit"><i class="icon-pencil""></i> Edit</a> ';

                    if (empty($article->published_at) && !empty($article->category_id)) {
                        $btn .= '<button data-id="' . $article->id . '"  class="dropdown-item publish"><i class="icon-rocket""></i> Publikasi</button> ';
                    } else {
                        $btn .= '<button data-id="' . $article->id . '"  class="dropdown-item text-danger cancel-publish"><i class="icon-rocket""></i> Batal Publikasi</button> ';
                    }

                    $btn .= '<button data-id="' . $article->id . '"  class="dropdown-item delete"><i class="icon-trash""></i> Hapus</button> ';

                    $btnColor = 'btn-dark';

                    if (is_null($article->published_at)) {
                        $btnColor = 'btn-outline-dark';
                    }
                    return '<div role="group">
                                <button id="btnDropdown" type="button" class="btn ' . $btnColor . '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnDropdown">' .
                        $btn
                        . '</div>
                            </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.articles.index', $data);
    }

    function create()
    {
        $data['title'] = 'Buat Artikel';
        $data['article_categories'] = ArticleCategory::all();

        return view('admin.articles.form-modal', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Edit Artikel';
        $data['article'] = Article::findOrFail($request->id);

        return view('admin.articles.detail', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = 'Edit Artikel';
        $data['article'] = Article::findOrFail($request->id);
        $data['article_categories'] = ArticleCategory::all();

        return view('admin.articles.form-modal', $data);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'title' => ($request->id) ? 'required' : 'required|unique:articles',
                'category_id' => 'required',
                'body' => 'required',
            ],
            [
                'title.required' => 'Mohon isi kolom judul artikel',
                'title.unique' => 'Sudah ada artikel dengan judul yang sama',
                'category_id.required' => 'Mohon isi kolom kategori artikel',
                'body.required' => 'Mohon lengkapi isi artikel',
            ],
        );

        $image = $request->hidden_image;

        if ($request->file('image')) {
            $path = 'public/article-images/';
            $file = $request->file('image');
            $file_name = Str::random(5) . time() . '_' . $file->getClientOriginalName();

            $file->storeAs($path, $file_name);
            $image = "storage/article-images/" . $file_name;
        }

        $data = Article::updateOrCreate([
            'id' => $request->id,
        ], [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,
            'body' => $request->body,
            'image' => $image,
        ]);

        if ($request->id != $data->id) {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Artikel telah ditambahkan.',
            ]);
        } else {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Data telah diperbaharui.',
            ]);
        }
    }

    function check(Request $request)
    {
        $data = Article::findOrFail($request->id);

        return response()->json($data);
    }

    function publish(Request $request)
    {
        $data = Article::findOrFail($request->id);
        $data->published_at = Carbon::now();
        $data->update();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Artikel telah diposting.',
        ]);
    }

    function cancelPublish(Request $request)
    {
        $data = Article::findOrFail($request->id);
        $data->published_at = null;
        $data->update();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Artikel telah dibatalkan.',
        ]);
    }

    function destroy(Request $request)
    {
        $data = Article::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
