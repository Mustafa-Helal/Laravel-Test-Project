<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id'=>$this->resource['id'],
            'name'=>$this->resource['name'],
            'description'=>$this->resource['description'],
            'price'=>$this->resource['price'],
            'stock'=>$this->resource['stock'],
            'created_at'=>$this->resource['created_at'],
            'updated_at'=>$this->resource['updated_at'],
        ];
    }
}
