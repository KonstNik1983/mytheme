'use strict';

const phoneIcon = document.getElementById('phoneIcon');
const modal = document.getElementById('modal');
const closeModal = document.getElementById('closeModal');

phoneIcon.addEventListener('click', () => {
  modal.style.display = 'flex';
});

// Закрытие модального окна
closeModal.addEventListener('click', () => {
  modal.style.display = 'none';
});

// Закрытие модального окна при клике вне области контента
window.addEventListener('click', e => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});

document.getElementById('year').textContent = new Date().getFullYear();
