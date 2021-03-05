<?php declare(strict_types=1);
namespace T3\Dce\Components\DetailPage;

/*  | This extension is made with love for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2020-2021 Armin Vieweg <armin@v.ieweg.de>
 */
class SlugValue
{
    protected $slug;

    protected $unique;

    public function __construct(string $slug, bool $unique)
    {
        $this->slug = $slug;
        $this->unique = $unique;
    }

    public function wasUnique(): bool
    {
        return $this->unique;
    }

    public function __toString(): string
    {
        return $this->slug;
    }
}
