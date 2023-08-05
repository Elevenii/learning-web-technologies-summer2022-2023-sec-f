const faqList = document.getElementById('faqList');


async function fetchFAQs() {
    try {
        const response = await fetch('faqs.json');
        const faqs = await response.json();
        return faqs;
    } catch (error) {
        console.error('Error fetching FAQs:', error);
        return [];
    }
}

async function populateFAQs() {
    const faqs = await fetchFAQs();

    if (faqs.length === 0) {
        faqList.innerHTML = '<p>Oops! Something went wrong. Please try again later.</p>';
        return;
    }

    faqs.forEach((faq, index) => {
        const faqItem = document.createElement('div');
        faqItem.classList.add('faq-item');

        const questionElement = document.createElement('h3');
        questionElement.textContent = `${index + 1}. ${faq.question}`;

        const answerElement = document.createElement('p');
        answerElement.textContent = faq.answer;
        answerElement.classList.add('answer');

        faqItem.appendChild(questionElement);
        faqItem.appendChild(answerElement);

        faqItem.addEventListener('click', () => {
            answerElement.style.display = answerElement.style.display === 'none' ? 'block' : 'none';
        });

        faqList.appendChild(faqItem);
    });
}

populateFAQs();