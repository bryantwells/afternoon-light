export class Exhibitor {

	element!: HTMLDetailsElement;

	constructor(element: HTMLDetailsElement) {
		this.element = element;
	}

	init() {
		this._handleAnchor();
		console.log(window.location.hash, this.element.id);
	}

	_handleAnchor = () => {
		if (window.location.hash == `#${this.element.id}`) {
			this.element.open = true;
		}
	}

}