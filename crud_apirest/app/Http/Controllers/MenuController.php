<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller {
    //
    public function getAll() {
        return Menu::all();
    }

    public function getMenuById($id) {
        return Menu::find($id);
    }

    public function store(Request $request) {
        $menu = new Menu();

        $menu->name = $request['name'];
        $menu->category = $request['category'];
        $menu->price = $request['price'];

        $menu->save();

        return ['Plato añadido'];
    }

    public function update(Request $request, $id) {
        $menu = Menu::find($id);

        $menu->name = $request['name'];
        $menu->category = $request['category'];
        $menu->price = $request['price'];

        $menu->save();

        return ['Plato actualizado'];
    }

    public function destroy($id) {
        $menu = Menu::find($id);

        $menu->delete();

        return ['Plato eliminado'];
    }
}
