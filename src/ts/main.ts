import { Content } from './_components/content';
import { Exhibitor } from './_components/exhibitor';

const contentElement = document.querySelector('.Content--home')
if (contentElement) {
	const content = new Content(contentElement);
	content.init();
}

const exhibitorElement = document.querySelector('.Exhibitor') as HTMLDetailsElement;
if (exhibitorElement) {
	const exhibitor = new Exhibitor(exhibitorElement);
	exhibitor.init();
}