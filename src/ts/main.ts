import { Content } from './_components/content';

const contentElement = document.querySelector('.Content--home')
if (contentElement) {
	const content = new Content(contentElement);
	content.init();
}