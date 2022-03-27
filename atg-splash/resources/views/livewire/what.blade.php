<div x-data="{ open:false }" @click="open = true" class="container-what">
    <h1 class="header-what">WHAT WE DO</h1>
    <div class="details">
        <ul x-show="open" @click.away="open = false">
            <li>First item</li>
            <li>Second item</li>
            <li>Third Item</li>
        </ul>
    </div>
</div>

