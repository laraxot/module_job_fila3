<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Job\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index() {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::index';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create() {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::create';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Renderable
     */
    public function store(Request $request) {
    }

    /**
     * Show the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function show($id) {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::show';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function edit($id) {
        /**
         * @phpstan-var view-string
         */
        $view = 'job::edit';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function update(Request $request, $id) {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function destroy($id) {
    }
}
=======
=======
>>>>>>> 7563b33 (rebase)
<?php

declare(strict_types=1);

namespace Modules\Job\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index() {
        return view('job::index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create() {
        return view('job::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Renderable
     */
    public function store(Request $request) {
    }

    /**
     * Show the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function show($id) {
        return view('job::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function edit($id) {
        return view('job::edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function update(Request $request, $id) {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function destroy($id) {
    }
}
<<<<<<< HEAD
>>>>>>> 26a6287 (rebase)
=======
>>>>>>> 7563b33 (rebase)
=======
<?php

declare(strict_types=1);

namespace Modules\Job\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index() {
        return view('job::index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create() {
        return view('job::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Renderable
     */
    public function store(Request $request) {
    }

    /**
     * Show the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function show($id) {
        return view('job::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function edit($id) {
        return view('job::edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function update(Request $request, $id) {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function destroy($id) {
    }
}
>>>>>>> 1f3dc29 (rebase)
