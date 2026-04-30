export class Content {

	element!: Element;
	_intersectionObserver?: IntersectionObserver;

	constructor(element: Element) {
		this.element = element;
	}

	init() {
		this._intersectionObserver = new IntersectionObserver(this._handleIntersection);
		this._intersectionObserver.observe(this.element);
	}

	_handleIntersection = (entries: IntersectionObserverEntry[]) => {
		entries.forEach((entry) => {
			if (entry.target == this.element) {
				document.body.classList.toggle('is-dimmed', entry.isIntersecting);
				console.log('x')
				console.log('')
			}
		});
	}

}