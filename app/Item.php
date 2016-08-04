<?php

namespace App;

use Storage;

class Item 
{
    public $product = '';
    public $quantity = 0;
    public $price = 0;
    
    public static function getItems() {
        $file_exists = Storage::has('cd-file.json');
        if(!$file_exists) {
            Storage::put('cd-file.json', '');
        }
        
        $items_json = Storage::get('cd-file.json');
        
        $items_converted = json_decode($items_json, true);
        
        $items = [];
        
        if(!is_array($items_converted) AND $items_converted != NULL) {
            //first item
            $items[] = $items_converted;
        }
        else {
            $items = $items_converted;

            usort($items, function ($a,$b) {
                             return strtotime($b['date'])-strtotime($a['date']);
                        });
        }
        
        return $items;
    }
    
    public function saveItem() {
        $items = $this->getItems();
        
        $new_item = [ 'product' => $this->product,
                      'quantity' => (int) $this->quantity,
                      'price' => (float) $this->price,
                      'date' => date('c'),
                      'total' => (int) $this->quantity * (float) $this->price
                    ];
        
        $items[] = $new_item;
        
        $new_item_list = json_encode($items);
        
        Storage::put('cd-file.json', $new_item_list);
    }
}
