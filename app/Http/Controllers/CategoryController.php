<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
        public function index()
        {
            $categories = Category::all(); 
            return view('categories.index', compact('categories'));
        }
    
        public function create()
        {
            return view('categories.create'); 
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);
        
            Category::create($request->all());
            return redirect()->route('categories.index');
        }
        
    
        public function show($id)
        {
            $category = Category::find($id); 
            return view('categories.show', compact('category')); 
        }
    
        public function edit($id)
        {
            $category = Category::find($id);
            return view('categories.edit', compact('category'));
        }
    
        public function update(Request $request, $id)
        {
            
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);
    
            $category = Category::find($id); 
            $category->update($request->all());
            return redirect()->route('categories.index');
        }
    
        public function destroy($id)
        {
            Category::destroy($id); 
            return redirect()->route('categories.index'); 
        }
    }

