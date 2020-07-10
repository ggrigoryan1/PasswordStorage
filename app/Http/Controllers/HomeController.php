<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Download;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'projects' => Project::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function project($id) {
    	return view('project', [
    		'project' => Project::with('downloads')->where('id', $id)->first()
    	]);
    }

    public function fileDownload(Download $download)
    {
        return response()->download(storage_path('app/public/'. $download->path), $download->filename);
    }
}
