<?php
namespace Mavvilabs\Crudlara\Controllers;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Mavvilabs\Crudlara\Models\Crudlara;


class TagsController extends Controller
{
    public function index()
    {
        $tags = Crudlara::all();
        return view('Crudlara::index', compact('tags'));
    }
}