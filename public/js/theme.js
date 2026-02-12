const Theme = {

    init() {

        const toggle = document.getElementById('darkToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');

        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
        }

        toggle.addEventListener('click', () => {

            document.documentElement.classList.toggle('dark');
            const isDark = document.documentElement.classList.contains('dark');

            localStorage.setItem('theme', isDark ? 'dark' : 'light');

            sunIcon.classList.toggle('hidden');
            moonIcon.classList.toggle('hidden');
        });
    }
};
