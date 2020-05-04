<?php

namespace App\Http\Controllers\Admin;
use App\Client;
use App\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /* Show All Pages */
    public function index()
    {
        $pages = Page::latest()->get();
        return view('admin.pages.index',
            [
                'pages' => $pages
            ]
        );
    }

    //show a single page
    public function show(Page $page)
    {
        return view('admin.pages.show',
            [
                'page' => $page
            ]
        );
    }

    // show a view to create a new page
    public function create(){
        return view('admin.pages.create');
    }

    // save the new page
    public function store(Request $request){
        // validation
        $this->validatePagesInput();

        $page   =  Page::create(
            [
                'title'  =>$request->title,
                'description'  =>$request->description,
            ]);

        return redirect(route('pages.index'));
    }

    // show a view to edit page
    public function edit(Page $page){
        return view('admin.pages.edit',compact('page'));
    }

    // persist the edited page
    public function update(Page $page){

        // validation
        $this->validatePagesInput();
        $page->update([
                'title'  =>\request('title'),
                'description'  =>\request('description'),

            ]);
        return redirect(route('pages.index'));
    }

    // Delete a Page
    public function delete(Page $page){
        $page->delete();
        return redirect(route('pages.index'));

    }

    // validate input
    public function validatePagesInput(){

        return \request()->validate([

            'title'=>'required',
        ]);

    }

}
