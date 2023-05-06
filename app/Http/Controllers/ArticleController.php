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
        $data['title'] = 'Data Berita';

        // dd(Article::all());
        if ($request->ajax()) {
            return DataTables::of(Article::all())
                ->addIndexColumn()
                ->addColumn('action', function (Article $article) {
                    $btn = '<button title="Sunting Data" data-id="' . $article->id . '"  class="btn btn-sm btn-warning edit"><i class="fa fa-edit"></i></button> ';
                    $btn .= '<button title="Hapus Data" data-id="' . $article->id . '" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></button>';
                    return '<div class="btn-group">' . $btn . '</div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.articles.index', $data);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'body' => 'required',
            ],
            [
                'title.required' => 'Mohon isi kolom judul berita',
                'body.required' => 'Mohon isi kolom isi berita',
            ]
        );

        if ($request->file('image')) {
            $path = 'public/article-images/';
            $file = $request->file('image');
            $file_name = time() . '_' . $file->getClientOriginalName();

            $upload = $file->storeAs($path, $file_name);
            // return response()->json([
            //     'code' => 200,
            //     'status' => 'Berhasil!',
            //     'message' => 'File Gambar Terdeteksi',
            // ]);
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
