<?php

namespace Nesk\Puphpeteer\Resources;

use Nesk\Puphpeteer\Traits\AliasesSelectionMethods;
use Nesk\Puphpeteer\Traits\AliasesEvaluationMethods;

/**
 * @method \Nesk\Puphpeteer\Resources\ElementHandle|null waitForSelector(string $selector, array{ visible: bool, hidden: bool, timeout: float } $options = null)
 * @method \Nesk\Puphpeteer\Resources\ElementHandle|null waitForXPath(string $xpath, array{ visible: bool, hidden: bool, timeout: float } $options = null)
 * @method \Nesk\Puphpeteer\Resources\ElementHandle<mixed>|null asElement()
 * @method \Nesk\Puphpeteer\Resources\Frame|null contentFrame()
 * @method mixed clickablePoint(mixed $offset = null)
 * @method void hover()
 * @method void click(array<string, mixed> $options = null)
 * @method mixed drag(mixed $target)
 * @method void dragEnter(mixed $data = null)
 * @method void dragOver(mixed $data = null)
 * @method void drop(mixed $data = null)
 * @method void dragAndDrop(\Nesk\Puphpeteer\Resources\ElementHandle $target, array{ delay: float } $options = null)
 * @method string[] select(string ...$values)
 * @method void uploadFile(string ...$filePaths)
 * @method void tap()
 * @method void focus()
 * @method void type(string $text, array{ delay: float } $options = null)
 * @method void press(mixed $key, array<string, mixed> $options = null)
 * @method mixed|null boundingBox()
 * @method mixed|null boxModel()
 * @method string|mixed screenshot(array<string, mixed> $options = null)
 * @method bool isIntersectingViewport(array{ threshold: float } $options = null)
 */
class ElementHandle extends JSHandle
{
    use AliasesSelectionMethods, AliasesEvaluationMethods;
}
