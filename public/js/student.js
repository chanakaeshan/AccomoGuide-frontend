const reserveButtons = document.querySelectorAll('.reserveButton');

		reserveButtons.forEach(button => {
			button.addEventListener('click', () => {
				const id = button.dataset.id;
				const ad = ads[id];

				popup.querySelector('h3').textContent = ad.title;
				popup.querySelector('p').textContent = ad.description;

				popup.style.display = 'block';
			});
		});

		const popup = document.querySelector('.popup');
		const closeBtn = popup.querySelector('.close');

		closeBtn.addEventListener('click', () => {
			popup.style.display = 'none';
		});

		const ads = [
			{
				id: 1,
				title: 'Modern 2 Bedroom Apartment',
				description: 'This modern 2 bedroom apartment is located in the heart of the city. It has a fully equipped kitchen, spacious living room and two newly renovated bathrooms. It is fully furnished and ready for move-in. Rent is $1500 per month, including utilities.',
			},
			{
				id: 2,
				title: 'Cozy Studio Apartment',
				description: 'This cozy studio apartment is perfect for students. It is fully furnished and includes all utilities. The building has a shared laundry room and a common area with a TV and video games. Rent is $800 per month.',
			},
			{
				id: 3,
				title: '3 Bedroom House with Yard',
				description: 'This 3 bedroom house has a spacious yard and a large living room. It is perfect for families. It is fully furnished and includes all utilities. The rental price is $2000 per month.',
			},
            {
				id: 4,
				title: '3 Bedroom House with Yard',
				description: 'This 3 bedroom house has a spacious yard and a large living room. It is perfect for families. It is fully furnished and includes all utilities. The rental price is $2000 per month.',
			}
		];