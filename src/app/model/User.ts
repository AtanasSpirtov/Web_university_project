export class User {
  id: number;
  name: string;

  email: string;

  fn: string;
  course: number;
  speciality: string;

  group: number


  constructor(id: number, name: string, email: string, fn: string, course: number, speciality: string, group: number) {
    this.id = id;
    this.name = name;
    this.email = email;
    this.fn = fn;
    this.course = course;
    this.speciality = speciality;
    this.group = group;
  }
}
