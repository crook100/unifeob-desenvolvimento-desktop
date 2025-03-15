<a style="font-size: medium;" title="{{ $item_title }}" data-placement="right" class="text-decoration-none text-white" href="{{ $item_url }}" @if(isset($item_click)) onclick="{{ $item_click }}" @endif >
    <li style="line-height: 10px;border-radius: 5px;border-bottom: 1px solid white;display: table;width: 100%;" class="sidebar-item text-center py-0">
        <div class="py-0" style="vertical-align: middle; display: table-cell;">
            <p class="mb-0"><i style="font-size: 1.25em;" class="fas fa-fw {{ $item_icon }}"></i></p>
            <span class="sidebar-text">
                <span style="font-size: 70%;">{{ $item_title }}</span>
            </span>
        </div>
    </li>
</a>
