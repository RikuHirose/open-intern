<?php
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Repositories\LessonRepositoryInterface;
use App\Repositories\HistoryRepositoryInterface;
use App\Services\UserServiceInterface;

use Illuminate\Http\Request;
use App\Http\Requests\Api\V1\HistoryRequest;

use Illuminate\Support\Facades\Auth;
use App\Models\Lesson;

class HistoryController extends Controller
{
    /** @var LessonRepositoryInterface */
    protected $lessonRepository;

    /** @var UserServiceInterface */
    protected $userService;


    /**
     * JobController constructor.
     *
     * @param lessonRepositoryInterface $lessonRepository
     */
    public function __construct(
        LessonRepositoryInterface  $lessonRepository,
        HIstoryRepositoryInterface $historyRepository,
        UserServiceInterface       $userService

    ) {
        $this->lessonRepository       = $lessonRepository;
        $this->historyRepository      = $historyRepository;
        $this->userService            = $userService;
    }


  public function postHistory(Lesson $lesson, HistoryRequest $request)
  {
    $input    = $request->only($this->historyRepository->getBlankModel()->getFillable());
    $authUser = $this->userService->getUser();

    $histories = $this->historyRepository->getBlankModel()->where('user_id', $input['user_id'])->get();

    if(count($histories) >= 30) {
      $old = $this->historyRepository->getBlankModel()->where('user_id', $input['user_id'])->oldest()->first();
      $old->delete();

      $history = $this->historyRepository->create($input);
      if (empty($history)) {
          return response()->json(['success' => false]);
      }

      return response()->json(['success' => true, 'delete' => true]);

    } else {

      $history = $this->historyRepository->create($input);

      if (empty($history)) {
          return response()->json(['success' => false]);
      }

      return response()->json(['success' => true]);
    }
  }

}
