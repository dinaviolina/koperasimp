<x-admin.layouts.nav />

<body class="bg-gray-50 dark:bg-gray-800 min-h-screen flex flex-col">
    <x-admin.layouts.navbar />
    <x-admin.layouts.sidebar />
    <x-admin.das.header-components :title="$title" />

    @stack('scripts')
</body>

</html>
