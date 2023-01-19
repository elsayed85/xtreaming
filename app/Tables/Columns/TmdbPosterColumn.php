<?php

namespace App\Tables\Columns;

use Closure;
use Filament\Tables\Columns\Column;
use Illuminate\View\ComponentAttributeBag;
use Throwable;

class TmdbPosterColumn extends Column
{
    protected string $view = 'tables.columns.tmdb-poster-column';

    protected int | string | Closure | null $height = 40;

    protected bool | Closure $isCircular = false;

    protected bool | Closure $isSquare = false;

    protected int | string | Closure | null $width = null;

    protected array | Closure $extraImgAttributes = [];

    protected function setUp(): void
    {
        parent::setUp();
    }

    public function height(int | string | Closure | null $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function circular(bool | Closure $condition = true): static
    {
        $this->isCircular = $condition;

        return $this;
    }

    /**
     * @deprecated Use `circular()` instead.
     */
    public function rounded(bool | Closure $condition = true): static
    {
        return $this->circular($condition);
    }

    public function square(bool | Closure $condition = true): static
    {
        $this->isSquare = $condition;

        return $this;
    }

    public function size(int | string | Closure $size): static
    {
        $this->width($size);
        $this->height($size);

        return $this;
    }

    public function width(int | string | Closure | null $width): static
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?string
    {
        $height = $this->evaluate($this->height);

        if ($height === null) {
            return null;
        }

        if (is_int($height)) {
            return "{$height}px";
        }

        return $height;
    }

    public function getImagePath(): ?string
    {
        $state = $this->getState();

        if (! $state) {
            return null;
        }

        if (filter_var($state, FILTER_VALIDATE_URL) !== false) {
            return $state;
        }

        return "https://image.tmdb.org/t/p/w500/{$state}";
    }

    public function getWidth(): ?string
    {
        $width = $this->evaluate($this->width);

        if ($width === null) {
            return null;
        }

        if (is_int($width)) {
            return "{$width}px";
        }

        return $width;
    }

    public function isCircular(): bool
    {
        return $this->evaluate($this->isCircular);
    }

    /**
     * @deprecated Use `isCircular()` instead.
     */
    public function isRounded(): bool
    {
        return $this->isCircular();
    }

    public function isSquare(): bool
    {
        return $this->evaluate($this->isSquare);
    }

    public function extraImgAttributes(array | Closure $attributes): static
    {
        $this->extraImgAttributes = $attributes;

        return $this;
    }

    public function getExtraImgAttributes(): array
    {
        return $this->evaluate($this->extraImgAttributes);
    }

    public function getExtraImgAttributeBag(): ComponentAttributeBag
    {
        return new ComponentAttributeBag($this->getExtraImgAttributes());
    }
}
