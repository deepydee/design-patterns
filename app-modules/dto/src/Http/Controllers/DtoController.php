<?php

namespace Modules\Dto\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Dto\Actions\CreateProductAction;
use Modules\Dto\CreateProductDtoFactory;
use Modules\Dto\Http\Requests\CreateProductRequest;
use Modules\Dto\Services\CreateProductService;

class DtoController extends Controller
{
    /**
     * Для любителей Porto
     *
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function dtoFactory(CreateProductRequest $request, CreateProductAction $createProductAction): JsonResponse
    {
        $dto = CreateProductDtoFactory::fromRequest($request);
        $result = $createProductAction($dto);

        return response()->json($result);
    }

    /**
     * Для любителей сервисного слоя
     *
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function dtoRequest(CreateProductRequest $request, CreateProductService $createProductService): JsonResponse
    {
        $dto = CreateProductDtoFactory::fromRequest($request);
        $result = $createProductService->run($dto);

        return response()->json($result);
    }

    public function withoutDto(CreateProductRequest $request, CreateProductAction $createProductAction): JsonResponse
    {
        $result = $createProductAction($request);

        return response()->json($result);
    }
}
