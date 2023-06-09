<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
                    $btn = '<button data-id="' . $article->id . '"  class="dropdown-item edit"><i class="fa fa-eye"></i> Lihat</button> ';
                    $btn .= '<button data-id="' . $article->id . '"  class="dropdown-item edit"><i class="icon-pencil""></i> Edit</button> ';
                    $btn .= '<button data-id="' . $article->id . '"  class="dropdown-item delete"><i class="icon-rocket""></i> Posting</button> ';
                    $btn .= '<button data-id="' . $article->id . '"  class="dropdown-item delete"><i class="icon-trash""></i> Hapus</button> ';
                    return '<div role="group">
                                <button id="btnDropdown" type="button" class="btn btn-outline-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnDropdown">'.
                                $btn
                                .'</div>
                            </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.articles.index', $data);
    }

    function create(){
        $data['title'] = 'Buat Artikel';

        return view('admin.articles.create', $data);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|unique:articles',
                'body' => 'required',
            ],
            [
                'title.required' => 'Mohon isi kolom judul artikel',
                'title.unique' => 'Sudah ada artikel dengan judul yang sama',
                'body.required' => 'Mohon isi kolom isi artikel',
            ]
        );

        if ($request->file('image')) {
            $path = 'public/article-images/';
            $file = $request->file('image');
            $file_name = time() . '_' . $file->getClientOriginalName();

            $upload = $file->storeAs($path, $file_name);
        }

        $data = Article::updateOrCreate([
            'id' => $request->id,
        ], [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            // 'image' => ($request->image) ? '' : ''
        ]);

        if ($request->id != $data->id) {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Data telah ditambahkan',
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
