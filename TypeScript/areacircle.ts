class Circle {
  radius: number;

  constructor(radius: number) {
    this.radius = radius;
  }

  getArea(): number {
    return Math.PI * this.radius * this.radius;
  }
}

const circle1 = new Circle(7);

console.log("Area of Circle:", circle1.getArea());