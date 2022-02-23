import EmployeesIndex from './components/employees/Index';
import EmployeesCreate from './components/employees/Create';
import EmployeesEdit from './components/employees/Edit';

export const routes = [{
    path: '/admin/employees',
    name: 'EmployeesIndex',
    component: EmployeesIndex
},
{
    path: '/admin/employees/create',
    name: 'EmployeesCreate',
    component: EmployeesCreate
}, {
    path: '/admin/employees/:id/Edit',
    name: 'EmployeesEdit',
    component: EmployeesEdit
}];
