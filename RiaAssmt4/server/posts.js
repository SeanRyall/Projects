/**
 * Created by sean_ryall on 2017-03-25.
 */


var faker = require('faker')
function generateBlogs () {
    var posts = []
    for (var id = 0; id < 5; id++) {
        var title = faker.lorem.words()
        var body = faker.lorem.paragraph()
        posts.push({
            "title": title,
            "body": body,
            "id": id
        })
    }
    return { "posts": posts }
}
module.exports = generateBlogs
