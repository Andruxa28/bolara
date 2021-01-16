<ul class="top-header-others">
    <li><a @if (app()->getLocale() == 'ru') class="active" @endif href="<?= route('setlocale', ['lang' => 'ru']) ?>">Рус</a></li>
    <li><a @if (app()->getLocale() == 'uk') class="active" @endif href="<?= route('setlocale', ['lang' => 'uk']) ?>">Укр</a></li>
</ul>