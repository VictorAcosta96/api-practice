<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalApiController extends Controller
{
    private $url = 'http://127.0.0.1:8000/api/note';

    public function index(){
        $response = Http::get($this->url);
        $notes = $response->json();
        return view('external.index', compact('notes'));
    }

    public function show($id){
        $response = Http::get("{$this->url}/{$id}");
        $note = $response->json();
        return view('external.show', compact('note'));
    }

    public function create(){
        return view('external.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|email|max:255',
        ]);
        Http::post($this->url, $data);
        return redirect()->route('external-users.index',)->with('success', 'Note created successfully!');
    }

    public function edit($id){
        $response = Http::get("{$this->url}/{$id}");
        $user = $response->json();
        return view('external.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|email|max:255',
        ]);
        Http::put("{$this->url}/{$id}", $data);
        return redirect()->route('external-users.index')->with('success', 'User updated successfully!');
    }

    public function destroy($id){
        Http::delete("{$this->url}/{$id}");
        return redirect()->route('external-users.index')->with('success', 'User deleted successfully!');
    }
}
