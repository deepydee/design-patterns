<?php

declare(strict_types=1);

namespace Modules\Iterator\RealWorld;

/**
 * Итератор CSV-файлов.
 *
 * @author Josh Lockhart
 */
class CSVIterator implements \Iterator
{
    private const ROW_SIZE = 4096;

    /**
     * Указатель на CSV-файл.
     *
     * @var resource
     */
    protected $filePointer = null;

    /**
     * Текущий элемент, который возвращается на каждой итерации.
     */
    protected array $currentElement = [];

    /**
     * Счётчик строк.
     */
    protected int $rowCounter = 1;

    /**
     * Разделитель для CSV-файла.
     */
    protected ?string $delimiter = null;

    /**
     * Конструктор пытается открыть CSV-файл. Он выдаёт исключение при ошибке.
     *
     * @param  string  $file CSV-файл.
     * @param  string  $delimiter Разделитель.
     *
     * @throws \Exception
     */
    public function __construct(string $file, string $delimiter = ',')
    {
        try {
            $this->filePointer = fopen($file, 'rb');
            $this->delimiter = $delimiter;
        } catch (\Exception $e) {
            throw new \Exception('The file "'.$file.'" cannot be read.');
        }
    }

    /**
     * Этот метод сбрасывает указатель файла.
     */
    public function rewind(): void
    {
        $this->rowCounter = 1;
        rewind($this->filePointer);
    }

    /**
     * Этот метод возвращает текущую CSV-строку в виде двумерного массива.
     *
     * @return array Текущая CSV-строка в виде двумерного массива.
     */
    public function current(): array
    {
        return $this->currentElement;
    }

    /**
     * Этот метод возвращает номер текущей строки.
     *
     * @return int Номер текущей строки.
     */
    public function key(): int
    {
        return $this->rowCounter;
    }

    /**
     * Этот метод проверяет, достигнут ли конец файла.
     *
     * @return bool Возвращает true при достижении EOF, в ином случае false.
     */
    public function next(): void
    {
        $this->currentElement = fgetcsv($this->filePointer, self::ROW_SIZE, $this->delimiter);
        $this->rowCounter++;
    }

    /**
     * Этот метод проверяет, является ли следующая строка допустимой.
     *
     * @return bool Если следующая строка является допустимой.
     */
    public function valid(): bool
    {
        if (is_resource($this->filePointer)) {
            if (feof($this->filePointer)) {
                fclose($this->filePointer);

                return false;
            }

            return true;
        }

        return false;
    }
}
