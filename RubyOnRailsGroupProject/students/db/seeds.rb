# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)
Student.delete_all

  firstnames = ['Trent', 'Sean', 'Jess', 'Andrew', 'Brandon', 'Tyler', 'Kyle', 'Kate', 'Greg', 'Danielle',
                'Josh', 'Theo', 'Regan', 'Chantelle', 'Darian', 'Mary', 'Bob', 'Joe', 'Steve', 'Frank',
                'Lori', 'Matt', 'Sara', 'Jane', 'Jill', 'Betty', 'Denise', 'Lois', 'Quinn', 'Shauna']
  lastnames = ['Mackeil', 'Ryall', 'Doyle', 'Jung', 'Min', 'Mackeil', 'Miller', 'Macdonald', 'Goodie', 'Wilkie',
                'Lewis', 'Huckstable', 'Mackeil', 'Smith', 'Pineo', 'Doyle', 'Moulton', 'Doe', 'Miller', 'Brady',
                'Donovan', 'Warner', 'Thompson', 'Doe', 'Hill', 'Gilby', 'Moulton', 'Mackeil', 'Bird', 'Vayne']
  student_id = ['w0295640', 'w0123456', 'w0123457', 'w0123458', 'w0123459', 'w0654321', 'w0654322', 'w0654333',
                'w0654344', 'w0654355', 'w0654355', 'w0698755', 'w0321555', 'w0658525', 'w0987455', 'w0321321',
                'w0654525', 'w0650123', 'w0654111', 'w0654999', 'w0654888', 'w0654777', 'w0654770', 'w0654541',
                'w0654769', 'w0654010', 'w0654101', 'w0685461', 'w0651577', 'w0699877']
  prog_status = ['Enrolled', 'Failing', 'Enrolled', 'Passing', 'Enrolled', 'Expelled', 'Failing', 'Passing', 'Withdrawn',
                  'Mat Leave', 'Enrolled', 'Wait list', 'Wait list', 'Failing', 'Withdrawn', 'Passing', 'Failing', 'Passing',
                  'Suspended', 'Enrolled', 'Passing', 'Failing', 'Withdrawn', 'Expelled', 'Enrolled', 'Passing', 'Passing',
                  'Wait list', 'Failing', 'Expelled']
  comment = ['Excellent Student', 'Poor Student', 'Excellent Student', 'Good Student', 'Excellent Student',
             'None', 'Never shows up', 'Needs work', 'None', 'None', 'Poor Student', 'Excellent Student',
              'Excellent Student', 'None', 'None', 'Good Student', 'Needs work', 'Excellent Student',
              'None', 'Sleeps a lot', 'Poor Student', 'Excellent Student', 'Excellent Student', 'Good Student',
              'Needs Work', 'Excellent Student', 'None', 'Poor Student', 'Good Student', 'Excellent Student']

  for i in 0..firstnames.length-1
    Student.create!(fname: firstnames[i], lname: lastnames[i], studentid: student_id[i], status: prog_status[i],
                    comments: comment[i])
  end

