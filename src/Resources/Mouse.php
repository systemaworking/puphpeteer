<?php

namespace Nesk\Puphpeteer\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void move(float $x, float $y, array{ steps: float } $options = null)
 * @method void click(float $x, float $y, array<string, mixed>&array{ delay: float } $options = null)
 * @method void down(array<string, mixed> $options = null)
 * @method void up(array<string, mixed> $options = null)
 * @method void wheel(array<string, mixed> $options = null)
 * @method mixed drag(mixed $start, mixed $target)
 * @method void dragEnter(mixed $target, mixed $data)
 * @method void dragOver(mixed $target, mixed $data)
 * @method void drop(mixed $target, mixed $data)
 * @method void dragAndDrop(mixed $start, mixed $target, array{ delay: float } $options = null)
 */
class Mouse extends BasicResource
{
    //
}
