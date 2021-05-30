<nav class="nav flex-column">
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @foreach($list As $row)
        <a class="nav-link {{ $isActive($row['label']) ? 'active' : '' }}"
        href="{{ route($row['route']) }}">
            <i class="icon-menu {{ $row['icon'] }}"></i>
            {{ $row ['label'] }}
        </a>
    @endforeach
</nav>
