<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class PageController extends Controller
{
      /**
     * @var ProjectRepository
     */
    private $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {

        $this->projectRepository = $projectRepository;
    }

    public function homepage()
    {
        return view('pages.homepage', [
            'projects' => $this->projectRepository->allProjects()
        ]);
    }
}
