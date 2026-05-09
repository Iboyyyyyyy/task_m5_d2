<?php

namespace App\Services;

use App\Models\Categories;

class CategoryServices
{
    public function create(array $data){
        return Categories::create([
            'name' => $data['name']
        ]);
    }

    public function update($id, array $data){
        $category = Categories::FindOrFail($id);

        return $category->update([
            'name' => $data['name']
        ]);

    }

    public function delete($id){
        return Categories::FindOrFail($id)->delete();
    }
}
