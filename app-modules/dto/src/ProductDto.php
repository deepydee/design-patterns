<?php

declare(strict_types=1);

namespace Modules\Dto;

/**
 * DTO (Data Transfer Object) - объект передачи данных
 *
 * DTO - это объект, который переносит данные между системами
 * (веб-сервисы, подсистемы или процессы одного приложения)
 *
 * Первичная цель DTO заключалась в передаче данных при дорогостоящих
 * удаленных вызовах. Вместо нескольких вызовов и передачи нескольких объектов
 * делается один вызов и передается один собирательный объект.
 *
 * Также решаются проблемы:
 * - ошибки при сериализации передаваемых данных
 * - сложная многоуровневая структура объектов
 * - ненужные (излишние) для передачи данные
 *
 * Объект DTO не должен содержать никакого поведения
 * (никакой бизнес-логики), кроме хареения, извлечения, сериализации и
 * десериализации собственных данных.
 */
final readonly class ProductDto
{
    public function __construct(
        public int $id,
        public string $name,
        public int $categoryId,
    ) {
    }
}
