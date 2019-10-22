<?php

namespace App\Repositories;

use Illuminate\HTTP\Request;

interface CarRepositoryInterface
{
    public function getAll();

    public function get($id);

    public function store(Request $request);

    public function update($id, Request $request);

    public function destroy($id);
}