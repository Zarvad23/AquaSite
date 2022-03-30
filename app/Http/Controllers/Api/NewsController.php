<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use http\Env\Response;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;
use function Symfony\Component\String\u;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NewsResource::collection(News::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsStoreRequest $request)
    {
        $created_news = News::create($request->validated());

        return new NewsResource($created_news);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return  new NewsResource($news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsStoreRequest $request, News $news)
    {
        $news->update($request->validated());

        return new NewsResource($news);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
