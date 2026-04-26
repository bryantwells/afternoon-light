import { HomepageContent } from './_components/homepage-content';

const homepageContentElement = document.querySelector('.Content--homepage')
if (homepageContentElement) {
	const homepageContent = new HomepageContent(homepageContentElement);
	homepageContent.init();
}

// import { Footer } from './_components/footer';

// const footerElement = document.querySelector('.Footer')
// if (footerElement) {
// 	const footer = new Footer(footerElement);
// 	footer.init();
// }

