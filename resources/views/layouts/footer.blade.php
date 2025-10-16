<footer class="site-footer">
    <div class="footer-container">
        <div class="brand">
            Ecommerce
        </div>

        <div class="links">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ url('products') }}">Productos</a>
            <a href="{{ url('products/create') }}">Vender</a>
        </div>

        <div class="contact">
            <div>Contacto: <a href="mailto:info@ecommerce.example"
                    style="color:inherit; text-decoration:underline;">info@ecommerce.example</a></div>
            <div>Tel: +52 55 1234 5678</div>
        </div>
    </div>

    <div class="copyright">
        &copy; {{ date('Y') }} Ecommerce. Todos los derechos reservados.
    </div>
</footer>
