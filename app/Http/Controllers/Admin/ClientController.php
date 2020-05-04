<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Resources\client as ClientResource;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /* show All Clients */
    public function index()
    {
        $clients = Client::with('media')->get();
        return ClientResource::collection($clients);
        return view('admin.clients.index', [
            'clients' => $clients
        ]);
    }

    //show a single client
    public function show(Client $client)
    {
        return view('admin.clients.show',
            [
                'client' => $client
            ]
        );
    }


    // show a view to create a new client
    public function create(){
        return view('admin.clients.create');
    }

    // save the new client
    public function store(Request $request){


//         validation
        $this->validateClient();
//        $fileName= $this->validateFile();

        $client   =  Client::create(
            [
               'email'  =>$request->email,
               'name'  =>$request->name,
               'phone'  =>$request->phone,
               'about_client'  =>$request->about_client,
               'client_opinion'  =>$request->client_opinion,
            ]);

        $client->addMedia($request->logo)->toMediaCollection('logos');

        return redirect(route('clients.index'));
    }

    // show a view to edit client
    public function edit(Client $client){
        $client_logo=$client->getMedia('logos');
        return view('admin.clients.edit',[
            'client'=>$client,
            'client_logo'=>$client_logo
        ]);

    }

    // persist the edited client
    public function update(Client $client){

        // validation
        $this->validateClient();
        $fileName= $this->validateFile();

          $client->update(
            [
                'email'  =>request('email'),
                'name'  =>request('name'),
                'phone'  =>request('phone'),
                'about_client'         =>request('about_client'),
                'client_opinion'         =>request('client_opinion'),
            ]
        );

        $client->addMedia(request('logo'))->toMediaCollection('logos');
        return redirect(route('clients.index'));

    }

    // Delete a client
    public function delete(Client $client){
        $client->delete();
        return redirect(route('clients.index'));
    }

    // validate input
    public function validateClient(){

        return \request()->validate([

//          'title'=>['required','min:3','mix:255'],
            'name'=>'',
            'email' =>'',
            'phone'=>'',
            'logo'=>'mimes:jpeg,png,jpg,bmp,svg|max:2048ed',

        ]);

    }

    // validate file
    public function validateFile(){

        if(\request()->hasFile('logo')) {
            $file = \request()->file('logo');
            $fileName = " venus_" . time() . '.' . $file->getClientOriginalExtension();
            $target_path = public_path('/uploads/');
            $file->move($target_path, $fileName);
            return $fileName;
        }
        else {
           return "logo-default.png";
        }
    }

}
