<?php

namespace App\Services;

use App\Models\Products;

class ProductServices
{
    public function create(array $data)
    {
        return Products::create([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'code' => $data['code'],
            'qty' => $data['qty'],
            'create_uid' => $data['userId'],
        ]);
    }

    public function update($id, array $data)
    {
        $product = Products::findOrFail($id);

        $product->update([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'code' => $data['code'],
            'qty' => $data['qty'],
            'update_uid' => $data['update_uid'],
        ]);

        return $product;
    }

    public function delete($id)
    {
        Products::findOrFail($id)->delete();
    }
}

