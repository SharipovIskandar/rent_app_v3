document.addEventListener('DOMContentLoaded', function() {
    const genderSelect = document.getElementById('gender');
    const maleIcon = document.getElementById('male-icon');
    const femaleIcon = document.getElementById('female-icon');

    function updateGenderIcon() {
        if (genderSelect.value === 'male') {
            maleIcon.classList.remove('hidden');
            femaleIcon.classList.add('hidden');
        } else {
            maleIcon.classList.add('hidden');
            femaleIcon.classList.remove('hidden');
        }
    }

    genderSelect.addEventListener('change', updateGenderIcon);

    updateGenderIcon();
});
