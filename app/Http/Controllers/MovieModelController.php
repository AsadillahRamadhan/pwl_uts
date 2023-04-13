<?php

namespace App\Http\Controllers;

use App\Models\MovieModel;
use Illuminate\Http\Request;

class MovieModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = MovieModel::latest()->filter(request(['q']))->paginate(3)->withQueryString();
        return view('movie.movie', [
            'movie' => $movie,
            'title' => 'Movies',
            'content' => 'Movies'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create_movie')
                ->with('url_form', url('/movie'))
                ->with('content', 'Movies')
                ->with('title', 'Add Movies');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:4|unique:movie,kode',
            'judul' => 'required|string|max:100',
            'genre' => 'required|in:Action,Science Fiction,Comedy,Horror',
            'sutradara' => 'required|string|max:50',
            'durasi' => 'required|string|max:20',
            'tanggal_rilis' => 'required|date',
            'rating' => 'required|string|max:10',
            'jam_tayang' => 'required|string|max:50',
        ]);
        $data = MovieModel::create($request->except(['_token']));
        return redirect('movie')
            ->with('success', 'Movie Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MovieModel  $movieModel
     * @return \Illuminate\Http\Response
     */
    public function show(MovieModel $movieModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MovieModel  $movieModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = MovieModel::find($id);
        return view('movie.create_movie')
            ->with('movie', $movie)
            ->with('url_form', url('/movie/'. $id))
            ->with('content', 'Movies')
            ->with('title', 'Edit Movies');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MovieModel  $movieModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|string|max:4|unique:movie,kode,'.$id,
            'judul' => 'required|string|max:100',
            'genre' => 'required|in:Action,Science Fiction,Comedy,Horror',
            'sutradara' => 'required|string|max:50',
            'durasi' => 'required|string|max:20',
            'tanggal_rilis' => 'required|date',
            'rating' => 'required|string|max:10',
            'jam_tayang' => 'required|string|max:50',
        ]);
        $data = MovieModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('movie')
            ->with('success', 'Movie Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MovieModel  $movieModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MovieModel::where('id', '=', $id)->delete();
        return redirect('movie')
            ->with('success', 'Movie Berhasil Dihapus');
    }
}
