<nav class="nav flex-column">
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @foreach($list As $row)
        <a class="nav-link {{ $isActive($row['label']) ? 'active' : '' }}" href="#">
            {{ $row ['label'] }}
        </a>
    @endforeach
</nav>
