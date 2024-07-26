import axios from 'axios';

document.addEventListener('DOMContentLoaded', function () {
    const countrySelect = document.getElementById('country_id');
    const stateSelect = document.getElementById('state_id');
    const citySelect = document.getElementById('city_id');

    const statesCache = {};
    const citiesCache = {};

    countrySelect.addEventListener('change', function () {
        const countryId = this.value;

        if (countryId) {
            if (statesCache[countryId]) {
                populateStates(statesCache[countryId]);
            } else {
                axios.get('/get-states', { params: { country_id: countryId } })
                    .then(response => {
                        statesCache[countryId] = response.data;
                        populateStates(response.data);
                    })
                    .catch(error => {
                        console.error('Error fetching states:', error);
                    });
            }
        } else {
            stateSelect.innerHTML = '<option value="">Select State</option>';
            citySelect.innerHTML = '<option value="">Select City</option>';
        }
    });

    stateSelect.addEventListener('change', function () {
        const stateId = this.value;

        if (stateId) {
            if (citiesCache[stateId]) {
                populateCities(citiesCache[stateId]);
            } else {
                axios.get('/get-cities', { params: { state_id: stateId } })
                    .then(response => {
                        citiesCache[stateId] = response.data;
                        populateCities(response.data);
                    })
                    .catch(error => {
                        console.error('Error fetching cities:', error);
                    });
            }
        } else {
            citySelect.innerHTML = '<option value="">Select City</option>';
        }
    });

    function populateStates(states) {
        stateSelect.innerHTML = '<option value="">Select State</option>';
        Object.entries(states).forEach(([key, value]) => {
            stateSelect.insertAdjacentHTML('beforeend', `<option value="${key}">${value}</option>`);
        });
    }

    function populateCities(cities) {
        citySelect.innerHTML = '<option value="">Select City</option>';
        Object.entries(cities).forEach(([key, value]) => {
            citySelect.insertAdjacentHTML('beforeend', `<option value="${key}">${value}</option>`);
        });
    }
});
