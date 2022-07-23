<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Module;
use App\Models\Admin\MasterData\Pegawai;
use App\Models\Admin\MasterData\Role;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_module'] = Module::withCount('role')->get();
        return view('admin.master-data.module.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master-data.module.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $module = new Module;
        $module->app = request('app');
        $module->name = request('name');
        $module->tag = request('tag');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->save();

        return redirect('admin/master-data/module');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        $data['module'] = $module;
        $data['list_pegawai'] = Pegawai::all();

        return view('admin.master-data.module.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        $data['module'] = $module;

        return view('admin/master-data/module.edit', $data)->with('success', 'Data Module Berhasil Diedit');
    }

    public function update(Module $module)
    {
        $module->app = request('app');
        $module->name = request('name');
        $module->tag = request('tag');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->save();

        return redirect('admin/master-data/module')->with('success', 'Data Module Berhasil Diedit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect('admin/master-data/module')->with('danger', 'Module Berhasil Dihapus');
    }

    public function addRole()
    {
        $role = new Role;
        $role->id_pegawai = request('id_pegawai');
        $role->id_module = request('id_module');
        $role->save();

        return back();
    }

    public function deleteRole(Role $role)
    {
        $role->delete();

        return back();
    }
}
