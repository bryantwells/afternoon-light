import { Content } from './_components/content';
import { Exhibitor } from './_components/exhibitor';

const contentElement = document.querySelector('.Content--home')
if (contentElement) {
	const content = new Content(contentElement);
	content.init();
}

([...document.querySelectorAll('.Exhibitor')] as HTMLDetailsElement[])
	.forEach((el) => {
		const exhibitor = new Exhibitor(el);
		exhibitor.init();
	})