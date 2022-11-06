using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Repos.Item.Item.Pulls.Item.Reviews {
    public class ReviewsPostRequestBody : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>**Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review.</summary>
        public string Body { get; set; }
        /// <summary>Use the following table to specify the location, destination, and contents of the draft review comment.</summary>
        public List<ReviewsPostRequestBody_comments> Comments { get; set; }
        /// <summary>The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value.</summary>
        public string Commit_id { get; set; }
        /// <summary>The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https://docs.github.com/rest/reference/pulls#submit-a-review-for-a-pull-request) when you are ready.</summary>
        public ReviewsPostRequestBody_event? Event { get; set; }
        /// <summary>
        /// Instantiates a new reviewsPostRequestBody and sets the default values.
        /// </summary>
        public ReviewsPostRequestBody() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static ReviewsPostRequestBody CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new ReviewsPostRequestBody();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"body", n => { Body = n.GetStringValue(); } },
                {"comments", n => { Comments = n.GetCollectionOfObjectValues<ReviewsPostRequestBody_comments>(ReviewsPostRequestBody_comments.CreateFromDiscriminatorValue)?.ToList(); } },
                {"commit_id", n => { Commit_id = n.GetStringValue(); } },
                {"event", n => { Event = n.GetEnumValue<ReviewsPostRequestBody_event>(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("body", Body);
            writer.WriteCollectionOfObjectValues<ReviewsPostRequestBody_comments>("comments", Comments);
            writer.WriteStringValue("commit_id", Commit_id);
            writer.WriteEnumValue<ReviewsPostRequestBody_event>("event", Event);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
