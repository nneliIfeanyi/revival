// Filter the sermons //
const filterSermons = function() {
	const filterSermonBtn = document.querySelectorAll('.filter-sermon-btn');
	const sermons = document.querySelectorAll('.sermon-items');

	for (var i = 0; i < filterSermonBtn.length; i++) {
		const btn = filterSermonBtn[i];

		btn.addEventListener('click', (e) => {
			filterSermonBtn.forEach(btn => btn.classList.remove('active')); // Remove the active class on all the button //
			const evt = e.target;
			evt.classList.add('active'); // Add active class to the button clicked //

			for (var i = 0; i < sermons.length; i++) {
				const sermon = sermons[i];
				const filter = e.target.dataset.filter;
				// Run if statements //
				filter === 'all' ? sermon.style.display = 'block' :
				sermon.classList.contains(filter) ? sermon.style.display = 'block' :
				sermon.style.display = 'none';
			}
		});
	}
}

filterSermons();