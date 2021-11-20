<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Create a client with a base URI
        $client = new Client(['base_uri' => 'https://api.mwi.dev/content/home']);
        
        // Send a request to http://localhost/WebServiceApp/public/api/user/tipoprojeto/
        $response = $client->request('GET');
        
        // $response contains the data you are trying to get, you can do whatever u want with that data now. However to get the content add the line
        $page = $response->getBody()->getContents();
        
        $posts = Post::all();
        
        return view('home', [
            'posts' => $posts
        ]);
    }
}
