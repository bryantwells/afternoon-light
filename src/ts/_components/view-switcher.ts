interface Header {
	imageUrl: string;
	xOffset: number;
	yOffset: number;
	color: string;
	caption: string;
}

interface HeaderData {
	x_offset: number;
	y_offset: number;
	color: string;
	caption: string;
	image: string[]; 
}

interface FileData {
	content: { uuid: string };
	url: string;
}

export class ViewSwitcher extends HTMLElement {

	initialized: boolean = false;
	headersData: HeaderData[] = Object.values(JSON.parse(this.getAttribute('headers')!));
	filesData: FileData[] = Object.values(JSON.parse(this.getAttribute('files')!));
	background: HTMLImageElement = this.querySelector('.Background img')!;
	position: number = 0;

	constructor() {
		super();
	}

	connectedCallback() {
		if (!this.initialized) this.init();
	}

	init() {
		this.addEventListeners();
	}

	addEventListeners() {
		window.addEventListener('click', () => {
			this.position++;
			this.update();
		});
	}

	update() {
		const image = new Image();
		image.addEventListener('load', () => {
			this.background.addEventListener('transitionend', this.swapBackground.bind(this));
			this.background.style.opacity = '0';
		});
		image.src = this.activeHeader.imageUrl;
	}

	swapBackground() {
		this.background.removeEventListener('transitionend', this.swapBackground);
		this.background.src = this.activeHeader.imageUrl;
		this.style.setProperty('--theme-color', this.activeHeader.color);
		this.style.setProperty('--x-offset', `${this.activeHeader.xOffset}em`);
		this.style.setProperty('--y-offset', `${this.activeHeader.yOffset}em`);
		this.background.style.opacity = '1';
	}

	get index(): number {
		return ((this.position % this.headersData.length) + this.headersData.length) % this.headersData.length;
	}

	get activeHeader(): Header {
		return {
			imageUrl: this.activeImage,
			xOffset: this.headersData[this.index].x_offset,
			yOffset: this.headersData[this.index].y_offset,
			color: this.headersData[this.index].color,
			caption: this.headersData[this.index].caption,
		}
	}

	get activeImage(): string {
		return this.filesData.find((file) => {
			return file.content.uuid == this.headersData[this.index].image[0].slice(7);
		})?.url ?? '';
	}
	

}
